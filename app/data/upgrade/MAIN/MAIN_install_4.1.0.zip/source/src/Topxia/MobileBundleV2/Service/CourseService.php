<?php
namespace Topxia\MobileBundleV2\Service;

interface CourseService
{
	public function getVersion();
	public function getCourses();
	public function getLearningCourse();
	public function getLearnedCourse();
	public function getFavoriteCoruse();
	public function searchCourse();
	public function getCourse();
	public function getReviews();

	public function favoriteCourse();
	public function unFavoriteCourse();
	public function getTeacherCourses();

	public function getCourseNotice();
	public function unLearnCourse();

	public function getCourseThreads();

	public function commitCourse();

	/**
	 *  获取问题详情（包括提问的用户信息）
	 *	courseId 课程id
	 *	threadId 问答id
	 *	token userToken
	*/
	public function getThread();

	/**
	 *	问题编辑更新
	 *	courseId 课程id
	 *	threadId 问答id
	 */
	public function updateThread();

	public function getThreadTeacherPost();

	/**
	 *	courseId 课程id
	 *	threadId 问答id
	 *	start 起始索引
	 *	limit 分页
	*/
	public function getThreadPost();

	/**
	 *	courseId
	 *	threadId
	 *	content 内容
	 *	imageCount 图片数量
	 *	image1， image2...
	*/
	public function postThread();

	/** 更新一条回复
	*
	*
	*
	*/
	public function updatePost();

	public function coupon();

	public function vipLearn();

	/**
	 *
	 *根据用户ID获取笔记信息(全部)
	 */
	public function getNoteList();

	/**
	 *
	 *添加一条笔记
	 */
	public function AddNote();


	/**
	 *
	 *删除一条笔记
	 */
	public function DeleteNote();
}